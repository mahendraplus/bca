// [6] Write a cpp program for function overloading. 
#include <iostream>

using namespace std;

int add(int a, int b) {
	return a + b;
}

double add(double a, double b) {
	return a + b;
}

int add(int a, int b, int c) {
	return a + b + c;
}

int main() {
	int x = 5;
	int y = 10;
	double a = 3.14;
	double b = 2.71;
	int p = 2;
	int q = 3;
	int r = 4;
	
	cout << "Adding integers: " << add(x, y) << endl;
	cout << "Adding doubles: " << add(a, b) << endl;
	cout << "Adding three integers: " << add(p, q, r) << endl;
	
	return 0;
}

