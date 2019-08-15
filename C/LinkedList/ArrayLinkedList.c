#include <stdio.h>
#include <stdlib.h>

#define MAX_SIZE 10
#define OK 1
#define ERROR 0

// 声明数据元素类型
typedef int ElementType;

// 函数返回类型
typedef int Status;

// 声明数组链表
typedef struct {
  //
  ElementType data[MAX_SIZE];
  int length;
} List;

// 声明错误处理函数
void error_reporting(char *message);

Status GetElement(List L, int i, ElementType *e);
Status ListInsert(List *L, int i, ElementType e);
Status ListDelete(List *L, int i, ElementType *e);

int main(int argc, char *argv[]) {
  List list;
  ElementType e;

  for (int i = 1; i <= MAX_SIZE; i++) {
    ListInsert(&list, i, e);
  }

  GetElement(list, 1, &e);
  printf("%d \n", e);

  ListDelete(&list, 3, &e);
  printf("%d \n", e);

  return 0;
}

// 用 e 返回 L 中第 i 个数据元素的值
Status GetElement(List L, int i, ElementType *e) {
  if (L.length == 0 || i < 1 || i > L.length) {
    return ERROR;
  }

  *e = L.data[i - 1];

  return OK;
}

// 在 L 中第 i 个位置之前插入新的数据元素 e, L 的长度加 1
Status ListInsert(List *L, int i, ElementType e) {
  int k;

  if (L->length == MAX_SIZE) {
    error_reporting("顺序线性表已满");
    return ERROR;
  }

  if (i < 1 || i > L->length + 1) {
    error_reporting("插入位置超出数组范围");
    return ERROR;
  }

  if (i <= L->length) {
    for (k = L->length - 1; k >= i - 1; k--) {
      L->data[k + 1] = L->data[k];
    }
  }

  L->data[i - 1] = e;
  L->length++;

  return OK;
}

// 删除 L 的第 i 个数据元素，并用 e 返回其值，L 的长度减 1
Status ListDelete(List *L, int i, ElementType *e) {
  int k;

  if (L->length == 0) {
    error_reporting("线性表为空");

    return ERROR;
  }

  if (i < 1 || i > L->length) {
    error_reporting("删除位置不正确");

    return ERROR;
  }

  *e = L->data[i - 1];
  if (i < L->length) {
    for (k = i; k < L->length; k++) {
      L->data[k - 1] = L->data[k];
    }
  }
  L->length--;

  return OK;
}

void error_reporting(char *message) {
  fputs(message, stderr);
  fputc('\n', stderr);
}
