function showarr(){
	var value_1 = document.getElementById('first').value;
	var arr=value_1.split(",");
	document.write("Input:<br>");
	for (i = 0; i <arr.length; i ++)
		document.write ("a [" + i + "] =" + arr [i] + "<br>");
	
	b=quickSort(arr);
	document.write("Sorted:<br>");
	for (i = 0; i <b.length; i ++)
		document.write ("b [" + i + "] =" + b [i] + "<br>");
	
	var min=b[0];
	var max=b[b.length-1];
	var sum=0;
	for(i=0; i<b.length;i++){
		sum+=+arr[i];
		if(arr[i]==max){
			sum=0;
			document.write("Here");
		}
		else if(arr[i]==min){
			sum-=arr[i];
			document.write("Сума між максимальним та мінімальним елементом= "+sum);
			break;
		}
	}

}
function quickSort(arr) {
  if (arr.length < 2) return arr;
  let pivot = arr[0];
  const left = [];
  const right = [];
    
  for (let i = 1; i < arr.length; i++) {
    if (pivot > arr[i]) {
      left.push(arr[i]);
    } else {
      right.push(arr[i]);
    }
  }
  return quickSort(left).concat(pivot, quickSort(right));
}


