#include <stdio.h>

int main()
{
	int a[100],i,j,n,t;
	
	// 输入一个数 n，表示接下来有 n 个数。
	printf("请输入排序数字的个数\n");
	scanf("%d", &n);
	
	for(i = 1; i <= n; i++){
		// 循环读取 n 个数到数组 a 中
		printf("请输入第%d个数字\n", i);
		scanf("%d", &a[i]);
	}
	
	// 冒泡排序的核心部分：n 个数排序，只用进行 n-1 次
	for(i = 1; i <= n-1; i++){	 
		// 从第 1 位开始比较直到最后一个尚未归为的数，已经归位的数则无需再进行比较
		for(j = 1; j < n-i; j++){ 
            // 比较大小并进行交换
			if(a[j] < a[j+1]){
				t = a[j];
				a[j] = a[j+1];
				a[j+1] = t; 
			}
		}
	}

	printf("[");
	for(i = 1; i <= n; i++){
		if (i == n){
			printf("%d]", a[i]);
		}else{
			printf("%d,", a[i]);			
		}
	}

	getchar();
	getchar();
	
	return 0;
}