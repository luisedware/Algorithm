#include <stdio.h>
#include <stdlib.h>

#define ERROR 0
#define SUCCESS 1

// 定义节点元素类型
typedef int ElementType;

// 定义函数返回类型
typedef int Status;

// 定义链表节点
typedef struct Node {
  ElementType data;
  struct Node *next;
} Node;

typedef struct Node *LinkList;

Status GetElement(LinkList L, int i, ElementType *e);
Status ListInsert(LinkList *L, int i, ElementType e);
void CreateListHead(LinkList *L, int n);

int main(int argc, char *argv[]) {
  LinkList l;
  ElementType e;

  CreateListHead(&l, 10);

  return 0;
}

Status GetElement(LinkList L, int i, ElementType *e) {
  int j;
  LinkList p;
  p = L->next;
  j = 1;

  while (p && j < i) {
    p = p->next;
    ++j;
  }

  if (!p || j > i) {
    return ERROR;
  }

  *e = p->data;

  return SUCCESS;
}

Status ListInsert(LinkList *L, int i, ElementType e) {
  int j;
  LinkList p, s;
  p = *L;
  j = 1;

  while (p && j < i) {
    p = p->next;
    ++j;
  }

  if (!p || j > i) {
    return ERROR;
  }

  s = (LinkList)malloc(sizeof(Node));
  s->data = e;
  s->next = p->next;
  p->next = s;

  return SUCCESS;
}

void CreateListHead(LinkList *L, int n) {
  LinkList p;
  int i;
  srand(time(0));

  *L = (LinkList)malloc(sizeof(Node));
  (*L)->next = NULL;

  for (i = 0; i < n; i++) {
    p = (LinkList)malloc(sizeof(Node));
    p->data = rand() % 100 + 1;
    p->next = (*L)->next;
    (*L)->next = p;
  }
}