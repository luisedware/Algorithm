#include <stdio.h>

// 定义全局变量
int a[101], n;

// 定义快速排序函数
void quick_sort(int left, int right){
	// 声明变量
	int i, j, t, temp;
	
	if (left > right) {
		return ;
	}
	
	// temp 中存的就是基准数
	temp = a[left];
	i = left;
	j = right;
	
	// 当 i 不等于 j 时，基准数尚不需要归位
	while (i != j) {
		// 顺序很重要，要先从右往左找
		while (a[j] >= temp && i < j) {
			j--;
		}
		
		// 再从左往右找
		while (a[i] <= temp && i < j) {
			i++;
		}
		
		// 交换两个数在数组中的位置
		if (i < j) {
			t = a[i];
			a[i] = a[j];
			a[j] = t;
		}
	}
	
	// 将基准数归位
	a[left] = a[i];
	a[i] = temp;
	
	// 递归处理其他基准数
	quick_sort(left, i - 1);
	quick_sort(i+1, right);
	
	return ;
}

int main(int argc, char *argv[])
{
	int i,j;
	
	scanf("%d", &n);
	for(i = 1; i <= n; i++){
		scanf("%d", &a[i]);
	}
	
	quick_sort(1, n);
	
	for (i = 1;i <= n;i++) {
		printf("%d", a[i]);
	}
	
	getchar();getchar();
	
	return 0;
}