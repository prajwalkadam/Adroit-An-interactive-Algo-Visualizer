const translatePos = {
  x: window.innerWidth / 2,
  y: window.innerHeight / 2
};
const initialPoints = [
  [-150, 180],
  [-130, -120],
  [50, -20],
  [100, 200],
  [200, -30],
  [250, -130]
].map((pointData) => {
  pointData[0] = pointData[0] + translatePos.x;
  pointData[1] = pointData[1] + translatePos.y;
  return pointData;
});
const initialEdges = [
  "A_B",
  "A_C",
  "A_D",
  "B_F",
  "C_B",
  "C_E",
  "C_D",
  "D_E",
  "E_F"
];
const points = [];
const edges = [];
const canvas = document.getElementById("canvas");
const $canvas = $(canvas);
const ctx = canvas.getContext("2d");
const toolsNames = {
  select: 0,
  addPoint: 1,
  addEdge: 2
};
const tools = Object.keys(toolsNames).map(toolName => {
  return {
    name: toolName,
    $html: $("#btn_" + toolName)
  };
});
const $notification = $("#notification");
const $btnRunAlgorithm = $("#btn_run_algorithm");
const $icon = $btnRunAlgorithm.find('.icon');
const $wrapAnimationSpeed = $('#wrap_animationSpeed');
const $animationSpeedText = $wrapAnimationSpeed.find('span');
const $animationSpeedInput = $wrapAnimationSpeed.find('input');
const $from = $("#from");
const $to = $("#to");
const dragPos = { x: 0, y: 0 };
let animationSpeed = 1500;
let notificationTimeout;
let runningTimeout;
let running = false;
let trackedCosts = {};
let processedNodes = [];
let trackedParents = {};
let optimalPath = [];
let startName;
let endName;
let graph;
let hoverPoint;
let holdingPoint;
let tmpEdge;
let activeToolIdx = 0;

function Timer(callback, delay) {
    var timerId, start, remaining = delay;

    this.pause = function() {
        window.clearTimeout(timerId);
        remaining -= Date.now() - start;
    };

    this.resume = function() {
        start = Date.now();
        window.clearTimeout(timerId);
        timerId = window.setTimeout(callback, remaining);
    };

    this.resume();
};

function getEdge(aName, bName) {
  let foundEdge = null;
  let pointsName;
  edges.every(edge => {
    pointsName = edge.name.split("_");
    if (
      (edge.a.name === aName && edge.b.name === bName) ||
      (edge.b.name === aName && edge.a.name === bName)
    ) {
      foundEdge = edge;
      return false;
    }

    return true;
  });
  return foundEdge;
}

function getPoint(name) {
  return points[name.charCodeAt(0) - 65];
}

function getPointsDistance(x1, y1, x2, y2) {
  return Math.sqrt((x2 - x1) ** 2 + (y2 - y1) ** 2);
}

function drawTmpEdge() {
  ctx.strokeStyle = "#000";
  ctx.setLineDash([5, 5]);
  ctx.beginPath();
  ctx.lineWidth = 2;
  ctx.moveTo(tmpEdge.a.x, tmpEdge.a.y);
  ctx.lineTo(tmpEdge.b.x, tmpEdge.b.y);
  ctx.stroke();
  ctx.closePath();
  ctx.setLineDash([]);
}

function updateCanvas() {
  ctx.fillStyle = "#fff";
  ctx.fillRect(0, 0, canvas.clientWidth, canvas.clientHeight);

  if(tmpEdge) {
     drawTmpEdge();
  }
  
  edges.forEach(edge => {
    ctx.strokeStyle = !edge.shortestPath ? "#000" : "#ff0000";
    if (edge.processed) {
      ctx.strokeStyle = "#ff0000";
    }

    if (edge.shortestPath) {
      ctx.strokeStyle = "#00ff00";
    }

    ctx.beginPath();
    ctx.lineWidth = 2;
    ctx.moveTo(edge.a.x, edge.a.y);
    ctx.lineTo(edge.b.x, edge.b.y);
    ctx.stroke();
    ctx.closePath();

    ctx.font = "12px Arial";
    ctx.textBaseline = "top";
    ctx.fillStyle = "#000";
    ctx.fillText(
      edge.cost,
      (edge.a.x + edge.b.x) / 2 + 5,
      (edge.a.y + edge.b.y) / 2 + 8
    );
  });

  points.forEach(point => {
    ctx.fillStyle = "#fff";
    const isProcessed = processedNodes.includes(point.name);
    const cost = trackedCosts[point.name];
    if (isProcessed) {
      ctx.fillStyle = "#ff0000";
    }
    
    if(point.processing) {
       ctx.fillStyle = "#00ff00";
    }

    if (optimalPath.indexOf(point.name) !== -1) {
      ctx.fillStyle = "#00ff00";
    }
    ctx.strokeStyle = "#142f9a";
    ctx.beginPath();
    ctx.arc(point.x, point.y, point.hover ? 7 : 5, 0, 2 * Math.PI);
    ctx.fill();
    ctx.stroke();
    ctx.closePath();
    ctx.fillStyle = !isProcessed ? "#000" : "#ff0000";
    ctx.font = "bold 20px Arial";
    ctx.textBaseline = "top";
    ctx.fillText(point.name, point.x + 5, point.y + 8);
    
    if(cost) {
      ctx.font = "bold 11px Arial";
      ctx.fillText(`(${cost === Infinity ? '∞' : cost})`, point.x + 20, point.y + 8);
    }
  }); 
}

function findLowestCostNode() {
  const costs = trackedCosts;
  const processed = processedNodes;
  const knownNodes = Object.keys(costs);

  const lowestCostNode = knownNodes.reduce((acc, node) => {
    let lowest = acc;
    if (lowest === null && !processed.includes(node)) {
      lowest = node;
    }
    if (costs[node] < costs[lowest] && !processed.includes(node)) {
      lowest = node;
    }
    return lowest;
  }, null);

  return lowestCostNode;
}

function createDijkstraGraph() {
  graph = {};
  let pointsName;
  let pointA;
  let pointB;

  points.forEach(point => (graph[point.name] = {}));

  edges.forEach(edge => {
    pointsName = edge.name.split("_");

    graph[edge.a.name][edge.b.name] = edge.cost;
    graph[edge.b.name][edge.a.name] = edge.cost;
  });
}

function calculatePath() {
  let parent = endName;
  let nextParent;
  let edge;
  while (parent) {
    optimalPath.push(parent);
    nextParent = trackedParents[parent];

    if (nextParent) {
      edge = getEdge(parent, nextParent);
      edge.shortestPath = true;
    }

    parent = nextParent;
  }
  optimalPath.reverse();

  const results = {
    distance: trackedCosts[endName],
    path: optimalPath
  };

  console.log(results);
  updateCanvas();
  $icon.removeClass('fa-pause').addClass('fa-play');
  running = false;
}

function calculateChilds(node, index) {
  const childsKeys = Object.keys(graph[node]);
  const costToReachNode = trackedCosts[node];
  const childrenOfNode = graph[node];
  const child = childsKeys[index];
  const costFromNodetoChild = childrenOfNode[child];
  const costToChild = costToReachNode + costFromNodetoChild;
  const edge = getEdge(node, child);

  if(!child) {
    getPoint(node).processing = false;
    calculateNode();
    return;
  }
  
  if (edge.processed) {
    calculateChilds(node, index + 1);
    return;
  }

  if (!trackedCosts[child] || trackedCosts[child] > costToChild) {
    showNotification(`calculate ${node}-${child}: ${costToChild} < ${trackedCosts[child]}, updating ${child} cost...`, animationSpeed);
    trackedCosts[child] = costToChild;
    trackedParents[child] = node;
  } else {
    showNotification(`calculate ${node}-${child}: ${costToChild} > ${trackedCosts[child]}, maintain ${child} cost...`, animationSpeed);
  }

  edge.processed = true;
  updateCanvas();
  
  runningTimeout = new Timer(() => {    
    calculateChilds(node, index + 1);
  }, animationSpeed);
}

function calculateNode() {
  const node = findLowestCostNode();
  showNotification(`get lowest cost non-visited node: ${node}`, animationSpeed);

  if (!node) {
    calculatePath();
    return;
  }

  getPoint(node).processing = true;
  processedNodes.push(node);
  updateCanvas();
  runningTimeout = new Timer(() => {    
    calculateChilds(node, 0);
  }, animationSpeed);
}

function resetGraph() {
  edges.forEach(edge => {
    edge.shortestPath = false;
    edge.processed = false;
  });

  points.forEach(point => {
    point.processed = false;
  });

  trackedCosts = {};
  processedNodes = [];
  trackedParents = {};
  optimalPath = [];
  if(runningTimeout) {
     clearTimeout(runningTimeout);
  }
}

function runDijkstra() {
  startName = $from.val();
  endName = $to.val();
  
  resetGraph();

  points.forEach(point => {
    trackedCosts[point.name] = Infinity;
  });
  trackedCosts[startName] = 0;

  calculateNode();
}

function updateEdgesCost() {
  edges.forEach(edge => {
    edge.cost = parseInt(
      getPointsDistance(edge.a.x, edge.a.y, edge.b.x, edge.b.y),
      10
    );
  });
}

function addNewEdge(pointA, pointB) {
  if (pointA === pointB || getEdge(pointA.name, pointB.name) !== null) {
    return;
  }

  edges.push({
    name: `${pointA.name}_${pointB.name}`,
    a: pointA,
    b: pointB,
    cost: null
  });
  updateEdgesCost();
}

function createPointHtml(point) {
  const $option = $(document.createElement("option"));
  $option.html(point.name);
  $option.val(point.name);
  $from.append($option.clone());
  $to.append($option.clone());
}

function addNewPoint(x, y) {
  const pointData = {
    name: String.fromCharCode(65 + points.length),
    x,
    y
  };
  points.push(pointData);
  createPointHtml(pointData);
  updateCanvas();
}

function runAlgorithm() {
  running = true;
  $icon.removeClass('fa-play').addClass('fa-pause');
  createDijkstraGraph();
  runDijkstra();
}

function onDragPoint(state) {
  const {evt} = state;
  const { x, y } = dragPos;
  holdingPoint.x = holdingPoint.x + (evt.clientX - x);
  holdingPoint.y = holdingPoint.y + (evt.clientY - y);
  dragPos.x = evt.clientX;
  dragPos.y = evt.clientY;
  updateEdgesCost();
  state.cursor = 'grabbing';
  state.needUpdate = true;
}

function updateHoverPoint(state) {
  let dist;
  let minDist = 10;
  points.forEach(point => {
    dist = getPointsDistance(state.evt.clientX, state.evt.clientY, point.x, point.y);

    if (point.hover && dist >= minDist) {
      hoverPoint = null;
      point.hover = false;
      state.needUpdate = true;
      return;
    }

    point.hover = false;

    if (dist < minDist) {
      hoverPoint = point;
      hoverPoint.hover = true;
      state.needUpdate = true;
    }
  });
}

function onMouseMove(evt) {
  const state = {evt, needUpdate: false, cursor: null};
  
  updateHoverPoint(state);

  switch (activeToolIdx) {
    case toolsNames.addEdge:
      if(hoverPoint) {
        state.cursor = 'crosshair';
      }
      if(tmpEdge) {
        tmpEdge.b.x = evt.clientX;
        tmpEdge.b.y = evt.clientY;
        state.needUpdate = true;
      }
      break;
    case toolsNames.addPoint:
      state.cursor = 'cell';
      if(hoverPoint) {
        state.cursor = 'no-drop';
      }
      break;
    case toolsNames.select:
      if(hoverPoint) {
         state.cursor = 'grab';
      }
      
      if (holdingPoint) {
        onDragPoint(state);
      }
      break;
  }
  
  $canvas.css({cursor: state.cursor || ''});

  if (state.needUpdate) {
    updateCanvas();
  }
}

function onMouseUp(evt) {
  switch (activeToolIdx) {
    case toolsNames.addEdge:
      if(tmpEdge && hoverPoint) {
         addNewEdge(tmpEdge.a, hoverPoint);
      }
      tmpEdge = null;
      updateCanvas();
      break;
    case toolsNames.select:
      holdingPoint = null;
      break;
  }
  
  $(document).off("mouseup", onMouseUp);
}

function onMouseDown(evt) {
  if(evt.target !== canvas) {
     return;
  }
  
  switch (activeToolIdx) {
    case toolsNames.addEdge:
      if (!hoverPoint) {
        return;
      }
      
      tmpEdge = {
        a: hoverPoint,
        b: {x: evt.clientX, y: evt.clientY}
      };
      break;
    case toolsNames.addPoint:
      if (hoverPoint) {
        return;
      }
      
      addNewPoint(evt.clientX, evt.clientY)
      break;
    case toolsNames.select:
      if (!hoverPoint) {
        return;
      }

      dragPos.x = evt.clientX;
      dragPos.y = evt.clientY;
      holdingPoint = hoverPoint;
      break;
  }
  
  $(document).on("mouseup", onMouseUp);
}

function onWindowResize() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  updateCanvas();
}

function showNotification(text, duration) {
  $notification
    .removeClass('hide')
    .html(text); 
  
  notificationTimeout = new Timer(() => {
    $notification.addClass('hide');
  }, duration);
}

function selectTool(toolIdx) {
  activeToolIdx = toolIdx;

  tools.forEach(tool => tool.$html.removeClass("active"));
  tools[activeToolIdx].$html.addClass("active");
}

function onAnimationSpeedChange(evt) {
  $animationSpeedText.html(`(${evt.currentTarget.value})`);
  animationSpeed = parseInt(evt.currentTarget.value, 10);
}

function onRunClick() {
  if(!running) {
    runAlgorithm();
    return;
  }
  
  if($icon.hasClass('fa-pause')) {
    $icon.removeClass('fa-pause').addClass('fa-play');
    runningTimeout.pause();   
    notificationTimeout.pause();
  } else {
    $icon.removeClass('fa-play').addClass('fa-pause');
    runningTimeout.resume();
    notificationTimeout.resume();
  }
}

function initialize() {  
  // Points
  initialPoints.forEach(pointPos => {
    const pointData = {
      name: String.fromCharCode(65 + points.length),
      x: pointPos[0],
      y: pointPos[1]
    };
    points.push(pointData);
    createPointHtml(pointData);
  });
  $to.val(points[points.length - 1].name);

  // Edges
  let pointA;
  let pointB;
  initialEdges.forEach((edgeName) => {
    pointA = points[edgeName.charCodeAt(0) - 65];
    pointB = points[edgeName.charCodeAt(2) - 65];
    addNewEdge(pointA, pointB);
  });

  // Tools
  tools.forEach((tool, i) => tool.$html.on("click", () => selectTool(i)));
  selectTool(toolsNames.select);
  
  $btnRunAlgorithm.on('click', onRunClick);
  $animationSpeedInput.on('change', onAnimationSpeedChange);
  
  $(document)
    .on("mousemove", onMouseMove)
    .on("mousedown", onMouseDown);
  $(window).on('resize', onWindowResize);
  
  $notification.addClass('hide');
  onWindowResize();
}

initialize();