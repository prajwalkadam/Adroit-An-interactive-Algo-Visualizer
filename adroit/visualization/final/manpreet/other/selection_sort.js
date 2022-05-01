async function selection(){
	console.log('In selection()');
	const ele = document.querySelectorAll(".bar");

	for(let i = 0; i < ele.length; i++){
		console.log('in ith loop');
		let min_index = i;

		//change color of position to swap with next minimum
		ele[i].style.background = 'blue';
		for(let j = i+1; j< ele.length; j++){
			console.log('in jith loop');

			//change color for current comparison 
			ele[j].style.background = 'orange';

			await waitforme(delay);

			if(parseInt(ele[j].style.height) < parseInt(ele[min_index].style.height)){
				console.log('in if condition height comparison');
				if(min_index !== i){
					//new min index found so we change the color of previous min index back
					ele[min_index].style.background = 'mediumpurple';
				}
				min_index = j;
			}
			else{
				//if current comparison normal change min index back to normal
				ele[j].style.background = 'mediumpurple';
			}
		}
		await waitforme(delay);
		swap(ele[min_index], ele[i]);
		//changing color back of min index as it's swapped
		ele[min_index].style.background = 'mediumpurple';
		//change color of sorted elements to lightgreen
		ele[i].style.background = 'lightgreen';
	}
}

const selectionSortbtn = document.querySelector(".selectionSort");
selectionSortbtn.addEventListener('click', async function(){
    disableSortingBtn();
    disableSizeSlider();
    disableNewArrayBtn();
    await selection();
    enableSortingBtn();
    enableSizeSlider();
    enableNewArrayBtn();
});