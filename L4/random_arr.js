document.querySelector('button').onclick = function () {
	let length = document.querySelector('#length').value;
	let min = document.querySelector('#min').value;
	let max = document.querySelector('#max').value;
	let result = [];
	for (let i = 0; i < length; i++) {
			if(result.length[i] < result.length[0]) {
				result.length[0] = result.length[i];
		}
		result.push(randomInteger(min, max));
	}
	console.log(result);
	document.querySelector('#out').innerHTML = result;
	let minel= Math.min.apply(null,result);
	let resulti= [];
	for(i=result.length+1;i>0;i--) {
		resulti[i]=result[i-1];
	}
	resulti[0]=minel;
	for(i=resulti.length;i>0;i--) {
		if(resulti[i]==minel){
			for(j=i;j>0;j--){ resulti[j]=resulti[j-1];}
	}
	}
	resulti[0]=null;
	if (max>min){
		document.querySelector('#out-input').value = resulti;
		document.querySelector('#sorted').value = selectionSort(result);
	}
	else{
		document.querySelector('#out-input').value = "Мінімальний більше максимального";
	}
	
	return result;
}

function randomInteger(min, max) {
  // получить случайное число от (min-0.5) до (max+0.5)
  let rand = min - 0.5 + Math.random() * (max - min + 1);
  return Math.round(rand);
}

function selectionSort(inputArr) { 
    let n = inputArr.length;
        
    for(let i = 0; i < n; i++) {
        // Finding the smallest number in the subarray
        let min = i;
        for(let j = i+1; j < n; j++){
            if(inputArr[j] > inputArr[min]) {
                min=j; 
            }
         }
         if (min != i) {
             // Swapping the elements
             let tmp = inputArr[i]; 
             inputArr[i] = inputArr[min];
             inputArr[min] = tmp;      
        }
    }
    return inputArr;
}
