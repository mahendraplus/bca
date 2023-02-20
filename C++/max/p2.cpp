// MAX // 
#include<iostream>
using namespace std;

void swap(int,int);

int main(){
	int a=40,b=50;
	cout<<"Before Swapping: ";
	cout<<"a="<<a<<"\t"<<"b="<<b;
	cout<<"\n";
	swap(a,b);
}

void swap(int a,int b){
	int t=a;
	a=b;
	b=t;
	cout<<"After Swapping: ";
	cout<<"a="<<a<<"\t"<<"b="<<b;
}

/*
  OUTPUT:
  Before Swapping: a=40   b=50
  After Swapping: a=50    b=40
  
 */
