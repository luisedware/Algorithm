function swap(i, j, array)
{
	let temp = array[i];
	array[i] = array[j];
	array[j] = temp;
	
	return array;	
}

function quickSort(array, left, right)
{
	left = typeof left === 'number' ? left : 0;
	right = typeof right === 'number' ? right : array.length - 1;
	
	if (left < right) {
		partitionIndex = partition(array, left, right);
		quickSort(array, left, partitionIndex - 1);
		quickSort(array, partitionIndex + 1, right);
	}
	
	return array;
}

// 基于冒泡排序的分治
function partition (array, left, right){
	for (var i = left + 1, j = left; i <= right; i++) {
//		console.log(i+":"+array[i]+" < "+left+":"+array[left]+" "+j+"\n");
		array[i] < array[left] && swap(i, ++j, array); 
//		console.log('冒泡排序后：[' + array.join(', ') + ']');
	}
	swap(left, j, array);

	return j;
}

let array = [6, 1, 2, 7, 9, 3, 4, 5, 10, 8];
console.log(quickSort(array));