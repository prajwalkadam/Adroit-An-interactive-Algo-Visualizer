(function() {
  var AVL, Act, BST, Color, anim_or_appear, autorun, autorun_dur, autorun_loop, buttons_edit_playing, buttons_edit_stopped, clear_highlighted, color_of, do_step, draw_new_node, dur_index, durations, init_draw, main, move_bbox, redraw_changed_key, reposition_ptr, reposition_tree, set_cmd_buttons_usable, state, zip_gen;

  BST = class BST {
    constructor(key = null, parent = null) {
      this.key = key;
      this.parent = parent;
      this.left = null;
      this.right = null;
    }

    is_empty() {
      return this.key != null;
    }

    * find(key, result) {
      yield ({
        act: Act.set_self,
        node: this,
        msg: `Searching for ${key}, looking at a ${this.key}`
      });
      if (this.key != null) {
        switch (false) {
          case key !== this.key:
            result.node = this;
            return (yield {
              act: Act.none,
              msg: `Found node with ${key}!`
            });
          case !(key < this.key && (this.left != null)):
            return (yield* this.left.find(key, result));
          case !(this.key < key && (this.right != null)):
            return (yield* this.right.find(key, result));
          default:
            result.node = null;
            return (yield {
              act: Act.none,
              msg: `No node has ${key}`
            });
        }
      }
    }

    * insert(key) {
      yield ({
        act: Act.set_self,
        node: this,
        msg: `Inserting ${key} at node with key = ${this.key}`
      });
      if (this.key == null) {
        this.key = key;
        yield ({
          act: Act.set_key,
          node: this,
          msg: `Empty tree, inserting ${key} as the only element`
        });
        return (yield* this.maintain());
      } else if (key < this.key) {
        if (this.left == null) {
          this.left = new this.constructor(key, this);
          yield ({
            act: Act.new_node,
            node: this.left,
            msg: `New left child node for key ${key}`
          });
          return (yield* this.left.maintain());
        } else {
          return (yield* this.left.insert(key));
        }
      } else {
        if (this.right == null) {
          this.right = new this.constructor(key, this);
          yield ({
            act: Act.new_node,
            node: this.right,
            msg: `New right child node for key ${key}`
          });
          return (yield* this.right.maintain());
        } else {
          return (yield* this.right.insert(key));
        }
      }
    }

    * min_node(result) {
      yield ({
        act: Act.set_self,
        node: this,
        msg: `Finding minimum at node with key = ${this.key}`
      });
      if (this.left != null) {
        return (yield* this.left.min_node(result));
      } else {
        return result.node = this;
      }
    }

    * replace(node) {
      this.key = node.key;
      this.left = node.left;
      this.right = node.right;
      if (this.left != null) {
        this.left.parent = this;
      }
      if (this.right != null) {
        this.right.parent = this;
      }
      return (yield {
        act: Act.replace,
        dest: this,
        src: node,
        msg: "Replacing deleted node with child"
      });
    }

    * delete() {
      var min_result, node;
      yield ({
        act: Act.set_self,
        node: this,
        msg: `Deleting node with key = ${this.key}`
      });
      node = this;
      if ((this.left != null) && (this.right != null)) {
        min_result = {};
        yield* this.right.min_node(min_result);
        node = min_result.node;
        [this.key, node.key] = [node.key, this.key];
        yield ({
          act: Act.swap_key,
          x: this,
          y: node,
          msg: `Swapping ${this.key} with right minimum ${node.key}`
        });
      }
      if (node.right != null) {
        yield* node.replace(node.right);
      } else if (node.left != null) {
        yield* node.replace(node.left);
      } else {
        if (node.parent != null) {
          if (node.parent.right === node) {
            node.parent.right = null;
          } else {
            node.parent.left = null;
          }
          yield ({
            act: Act.delete,
            node: node,
            msg: "Removing leaf"
          });
          node = node.parent;
        } else {
          node.key = null;
          yield ({
            act: Act.set_key,
            node: node,
            msg: "Removing last key"
          });
        }
      }
      return (yield* node.maintain());
    }

    * maintain() {
      return (yield {
        act: Act.set_self,
        node: this,
        msg: ""
      });
    }

    * in_order_traversal() {
      if (this.left != null) {
        yield* this.left.in_order_traversal();
      }
      yield this;
      if (this.right != null) {
        return (yield* this.right.in_order_traversal());
      }
    }

    * pre_order_traversal() {
      yield this;
      if (this.left != null) {
        yield* this.left.pre_order_traversal();
      }
      if (this.right != null) {
        return (yield* this.right.pre_order_traversal());
      }
    }

  };

  AVL = class AVL extends BST {
    constructor(key = null, parent = null) {
      super(key, parent);
      this.height = 0;
      this.skew = 0;
    }

    update() {
      var left_height, right_height;
      left_height = (this.left != null ? this.left.height : -1);
      right_height = (this.right != null ? this.right.height : -1);
      this.height = Math.max(left_height, right_height) + 1;
      return this.skew = right_height - left_height;
    }

    * right_rotate() {
      var a, b, c, node;
      [node, c] = [this.left, this.right];
      [a, b] = [node.left, node.right];
      [this.key, node.key] = [node.key, this.key];
      if (a != null) {
        a.parent = this;
      }
      if (c != null) {
        c.parent = node;
      }
      [this.left, this.right] = [a, node];
      [node.left, node.right] = [b, c];
      node.update();
      this.update();
      return (yield {
        act: Act.swap_key,
        x: this,
        y: node,
        msg: "Right rotate"
      });
    }

    * left_rotate() {
      var a, b, c, node;
      [a, node] = [this.left, this.right];
      [b, c] = [node.left, node.right];
      [this.key, node.key] = [node.key, this.key];
      if (a != null) {
        a.parent = node;
      }
      if (c != null) {
        c.parent = this;
      }
      [this.left, this.right] = [node, c];
      [node.left, node.right] = [a, b];
      node.update();
      this.update();
      return (yield {
        act: Act.swap_key,
        x: this,
        y: node,
        msg: "Left rotate"
      });
    }

    * maintain() {
      this.update();
      yield ({
        act: Act.set_self,
        node: this,
        msg: `Maintain node with key ${this.key}, h = ${this.height}, s = ${this.skew}`
      });
      if (this.skew === 2) {
        if (this.right.skew === -1) {
          yield* this.right.right_rotate();
        }
        yield* this.left_rotate();
      } else if (this.skew === -2) {
        if (this.left.skew === 1) {
          yield* this.left.left_rotate();
        }
        yield* this.right_rotate();
      }
      if (this.parent != null) {
        return (yield* this.parent.maintain());
      }
    }

  };

  //####################################################
  Color = net.brehaut.Color;

  state = {
    root: null
  };

  init_draw = function(draw, empty_root) {
    var edge_group, info, node_group, ptr_group, self_ptr;
    // setup info
    edge_group = draw.group();
    node_group = draw.group();
    ptr_group = draw.group();
    self_ptr = ptr_group.circle(0).fill({
      opacity: 0
    }).stroke({
      color: '#000',
      width: 5
    }).hide();
    info = {
      node_group: node_group,
      edge_group: edge_group,
      ptr_group: ptr_group,
      //nodes: {},
      in_order: [],
      root: empty_root,
      highlighted: draw.set(),
      self: {
        node: empty_root,
        ptr: self_ptr
      }
    };
    // draw empty root
    draw_new_node(node_group, edge_group, empty_root);
    //info.nodes[empty_root.addr] = empty_root
    // position it
    reposition_tree(draw, info);
    info.self.ptr.hide();
    // done!
    return info;
  };

  //##########################################################
  color_of = function(v) {
    if (v != null) {
      return Color({
        hue: v * (360 / 120),
        value: 1,
        saturation: 0.55
      }).toCSS();
    } else {
      return '#ddd';
    }
  };

  // gives each node a unique id associated with the BST node and its SVG representations
  //allocation_index = 0
  draw_new_node = function(ndraw, edraw, node) {
    var c, g, key, pc, t, tbox;
    // draw node itself
    g = ndraw.group();
    c = g.circle(0).fill(color_of(node.key)).stroke({
      opacity: 0 //(color:'#000', width:1)
    });
    key = node.key != null ? node.key : " o ";
    t = g.text(`${key}`).font({
      family: "Monospace",
      size: 40
    });
    tbox = t.bbox();
    c.radius(7 / 8 * Math.max(tbox.width, tbox.height)).move(0, 0);
    t.center(c.cx(), c.cy());
    node.svg = g;
    node.bbox = g.bbox();
    node.bbox.move = move_bbox(node.bbox);
    // give node an id
    //addr = allocation_index
    //allocation_index += 1
    //node.addr = addr
    // draw parent edge if exists
    if (node.parent != null) {
      g.center(node.parent.bbox.cx, node.parent.bbox.cy);
      node.bbox.move({
        x: g.x(),
        y: g.y()
      });
      pc = node.parent.bbox;
      node.parent_edge = edraw.line(node.bbox.cx, node.bbox.cy, pc.cx, pc.cy).stroke({
        color: '#000',
        width: 1
      });
    } else {
      g.move(0, 0);
    }
    return true;
  };

  reposition_tree = function(draw, info, dur) {
    var a, height, i, j, len, len1, node, pos, ref, ref1, ref2, width, x_margin, y;
    // get in-order traversal
    info.in_order = (function() {
      var ref, results;
      ref = info.root.in_order_traversal();
      results = [];
      for (a of ref) {
        results.push(a);
      }
      return results;
    })();
    pos = {};
    // position by x
    x_margin = 0;
    width = 8;
    ref = info.in_order;
    for (i = 0, len = ref.length; i < len; i++) {
      node = ref[i];
      node.bbox.move({
        x: width
      });
      width += node.bbox.width + x_margin;
    }
    // position by y
    height = 0;
    ref1 = info.root.pre_order_traversal();
    for (node of ref1) {
      y = (node.parent != null ? node.parent.bbox.y + node.parent.bbox.height : 8);
      node.bbox.move({
        y: y
      });
      height = Math.max(height, y + node.bbox.height);
    }
    ref2 = info.in_order;
    // position nodes and edges
    for (j = 0, len1 = ref2.length; j < len1; j++) {
      node = ref2[j];
      anim_or_appear(node.svg, dur).move(node.bbox.x, node.bbox.y);
      if (node.parent_edge != null) {
        anim_or_appear(node.parent_edge, dur).plot(node.bbox.cx, node.bbox.cy, node.parent.bbox.cx, node.parent.bbox.cy);
        true;
      }
    }
    // move ptrs
    reposition_ptr(info.self, dur);
    // set viewbox
    draw.viewbox({
      x: 0,
      y: 0,
      width: width + 8,
      height: height + 8
    });
    draw.size(width, height);
    return true;
  };

  move_bbox = function(bbox) {
    return function(obj) {
      var dx, dy;
      if (obj.x != null) {
        dx = obj.x - bbox.x;
        bbox.x += dx;
        bbox.x2 += dx;
        bbox.cx += dx;
      }
      if (obj.y != null) {
        dy = obj.y - bbox.y;
        bbox.y += dy;
        bbox.y2 += dy;
        bbox.cy += dy;
      }
      return bbox;
    };
  };

  redraw_changed_key = function(info, node) {
    node.svg.remove();
    if (node.parent != null) {
      node.parent_edge.remove();
    }
    return draw_new_node(info.node_group, info.edge_group, node);
  };

  //node.svg.center(orig_bbox.cx, orig_bbox.cy)
  reposition_ptr = function(ptr, dur) {
    return anim_or_appear(ptr.ptr, dur).radius(ptr.node.bbox.width / 2).center(ptr.node.bbox.cx, ptr.node.bbox.cy);
  };

  clear_highlighted = function(info) {
    info.highlighted.stroke({
      opacity: 0
    });
    return info.highlighted.clear();
  };

  //####################################################
  anim_or_appear = function(obj, dur) {
    if (obj.visible()) {
      return obj.animate(dur);
    } else {
      return obj.show();
    }
  };

  Act = {
    none: 0,
    set_self: 1, // from, to
    new_node: 2, // node
    delete: 3, // node
    set_key: 4, // node, k
    swap_key: 5, // x, y
    replace: 6 // src, dest
  };

  do_step = function(draw, info, step) {
    var circle, dur;
    dur = autorun_dur();
    switch (step.act) {
      case Act.none:
        true; // do nothing
        break;
      case Act.set_self: // from, to
        info.self.node = step.node;
        circle = step.node.svg.select('circle');
        circle.animate(dur).stroke({
          color: '#000',
          width: 3,
          opacity: 1
        });
        info.highlighted.add(circle);
        reposition_ptr(info.self, dur);
        break;
      case Act.new_node: // node
        draw_new_node(info.node_group, info.edge_group, step.node);
        reposition_tree(draw, info, dur);
        break;
      case Act.delete: // node
        step.node.svg.remove();
        step.node.parent_edge.remove();
        reposition_tree(draw, info, dur);
        break;
      case Act.set_key: // node
        redraw_changed_key(info, step.node);
        reposition_tree(draw, info, dur);
        break;
      case Act.swap_key: // x, y
        [step.x.svg, step.y.svg] = [step.y.svg, step.x.svg];
        [step.x.bbox, step.y.bbox] = [step.y.bbox, step.x.bbox];
        //[step.x.parent_edge, step.y.parent_edge] = [step.y.parent_edge, step.x.parent_edge]
        //redraw_changed_key(info, step.x)
        //redraw_changed_key(info, step.y)
        reposition_tree(draw, info, dur);
        break;
      case Act.replace: // dest, src
        [step.src.bbox, step.dest.bbox] = [step.dest.bbox, step.src.bbox];
        [step.src.svg, step.dest.svg] = [step.dest.svg, step.src.svg];
        //[step.src.parent_edge, step.dest.parent_edge] = [step.dest.parent_edge, step.src.parent_edge]
        step.src.svg.remove();
        if (step.src.parent_edge != null) {
          step.src.parent_edge.remove();
        }
        reposition_tree(draw, info, dur);
        break;
      default:
        console.log(`Unknown Act ${step.act}`);
    }
    return true;
  };

  
  state = {};

  // autorun controls
  dur_index = 0;

  durations = [
    {
      swap: 1000,
      ptr: 600,
      name: "1x Speed"
    },
    {
      swap: 500,  
      ptr: 300,
      name: "2x Speed"
    },
    {
      swap: 200,
      ptr: 50,
      name: "5x Speed"
    },
    {
      swap: 50,
      ptr: 10,
      name: "20x Speed"
    }
  ];

  autorun = 0;

  autorun_dur = function() {
    return Math.max(durations[dur_index].swap, durations[dur_index].ptr);
  };

  buttons_edit_playing = function() {
    document.getElementById("play-button").innerHTML = "Pause";
    return document.getElementById("next-button").disabled = "true";
  };

  buttons_edit_stopped = function() {
    document.getElementById("play-button").innerHTML = "Play";
    return document.getElementById("next-button").disabled = null;
  };

  // start/stop play
  window.click_play = function() {
    switch (autorun) {
      case 0: // paused
        autorun = 1;
        buttons_edit_playing();
        return autorun_loop();
      case 1: // already playing
        return autorun = 0;
    }
  };

  // loop
  autorun_loop = function() {
    var dur;
    dur = autorun_dur();
    if (autorun === 1 && window.click_next()) {
      buttons_edit_playing();
      state.avl.draw.animate({
        duration: dur
      }).after(function() {
        return autorun_loop();
      });
    } else if (autorun === 0) {
      buttons_edit_stopped();
    }
    return true;
  };

  window.toggle_turbo = function() {
    dur_index = (dur_index + 1) % durations.length;
    return document.getElementById("turbo-button").innerHTML = durations[dur_index].name;
  };

  set_cmd_buttons_usable = function(can_press) {
    var value;
    value = (can_press ? null : "true");
    document.getElementById("cmd-insert").disabled = value;
    document.getElementById("cmd-find").disabled = value;
    return document.getElementById("cmd-delete").disabled = value;
  };

  zip_gen = function(a, b) {
    return {
      next: function() {
        var an, bn;
        an = a.next();
        bn = b.next();
        return {
          done: an.done && bn.done,
          value: [an, bn]
        };
      }
    };
  };

  window.click_next = function() {
    var next;
    if (state.gen != null) {
      next = state.gen.next();
      if (next.done) {
        state.gen = null;
        set_cmd_buttons_usable(true);
      } else {
        if (!next.value[0].done) {
          do_step(state.avl.draw, state.avl.info, next.value[0].value);
          document.getElementById("avl-msg").innerHTML = `AVL: ${next.value[0].value.msg}`;
        }
        if (!next.value[1].done) {
          do_step(state.bst.draw, state.bst.info, next.value[1].value);
          document.getElementById("bst-msg").innerHTML = `BST: ${next.value[1].value.msg}`;
        }
        set_cmd_buttons_usable(false);
      }
      return true;
    } else {
      return false;
    }
  };

  window.click_insert = function() {
    var key;
    if (state.gen != null) {
      return true; // another operation is on-going
    } else {
      key = Number(document.getElementById("arg-value").value);
      if (!isNaN(key)) {
        clear_highlighted(state.avl.info);
        clear_highlighted(state.bst.info);
        state.gen = zip_gen(state.avl.info.root.insert(key), state.bst.info.root.insert(key));
        autorun = 1;
        return autorun_loop();
      }
    }
  };

  window.click_find = function() {
    var key;
    if (state.gen != null) {
      return true; // another operation is on-going
    } else {
      key = Number(document.getElementById("arg-value").value);
      if (!isNaN(key)) {
        clear_highlighted(state.avl.info);
        clear_highlighted(state.bst.info);
        state.gen = zip_gen(state.avl.info.root.find(key, {}), state.bst.info.root.find(key, {}));
        autorun = 1;
        return autorun_loop();
      }
    }
  };

  window.click_random_key = function() {
    var key;
    key = Math.floor(Math.random() * 100);
    document.getElementById("arg-value").value = `${key}`;
    return window.click_insert();
  };

  window.click_delete = function() {
    var generator, key;
    if (state.gen != null) {
      return true; // another operation is on-going
    } else {
      key = Number(document.getElementById("arg-value").value);
      if (!isNaN(key)) {
        clear_highlighted(state.avl.info);
        clear_highlighted(state.bst.info);
        generator = function*(info) {
          var find_result;
          find_result = {};
          yield* info.root.find(key, find_result);
          if (find_result.node != null) {
            return (yield* find_result.node.delete());
          }
        };
        state.gen = zip_gen(generator(state.avl.info), generator(state.bst.info));
        autorun = 1;
        return autorun_loop();
      }
    }
  };

  main = function() {
    var avl_root, bst_root;
    // avl
    state.avl = {};
    state.avl.draw = SVG('avl-drawing');
    avl_root = new AVL();
    state.avl.info = init_draw(state.avl.draw, avl_root);
    // bst
    state.bst = {};
    state.bst.draw = SVG('bst-drawing');
    bst_root = new BST();
    state.bst.info = init_draw(state.bst.draw, bst_root);
    // other set-up
    return state.gen = null;
  };

  SVG.on(document, 'DOMContentLoaded', main);

}).call(this);


//# sourceURL=coffeescript