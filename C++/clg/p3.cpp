// [3] Write a cpp program which explain the use of reference variable. 
#include <iostream>

using namespace std;

void swap(int& a, int& b) {
	int temp = a;
	a = b;
	b = temp;
}

int main() {
	int x = 5;
	int& y = x;
	
	cout << "x = " << x << endl;
	cout << "y = " << y << endl;
	
	y = 10;
	
	cout << "x = " << x << endl;
	cout << "y = " << y << endl;
	
	int a = 5;
	int b = 10;
	
	cout << "Before swapping: a = " << a << ", b = " << b << endl;
	
	swap(a, b);
	
	cout << "After swapping: a = " << a << ", b = " << b << endl;
	
	return 0;
}


