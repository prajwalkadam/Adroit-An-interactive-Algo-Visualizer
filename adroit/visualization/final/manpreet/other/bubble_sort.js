 async function bubble() {
	console.log('In bubble()');
	const ele = document.querySelectorAll(".bar");

	for(let i = 0; i < ele.length-1;i++){
		console.log('in ith loop');
		for(let j = 0; j < ele.length-i-1;j++){
			console.log('in jth loop');
			ele[j].style.background = 'orange';
			ele[j+1].style.background = 'orange';
			if(parseInt(ele[j].style.height) > parseInt(ele[j+1].style.height)){
				console.log('in if condition');
				await waitforme(delay);
				swap(ele[j],ele[j+1]);
			}
			ele[j].style.background = 'mediumpurple';
			ele[j+1].style.background = 'mediumpurple'
		}
		ele[ele.length-1-i].style.background = 'lightgreen';

	}
	ele[0].style.background = 'lightgreen';
}

const bubSortbtn = document.querySelector(".bubbleSort");
bubSortbtn.addEventListener('click',async function(){
 disableSortingBtn();
    disableSizeSlider();
    disableNewArrayBtn();
    await bubble();
    enableSortingBtn();
    enableSizeSlider();
    enableNewArrayBtn();
});