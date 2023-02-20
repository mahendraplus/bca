#include<iostream>
#include<iomanip>
using namespace std;

inline float mul(float a, float b) {
	return (a * b);
}

inline double div(double a, double b) {
	return (a / b);
}

void swap(int &a, int &b) {
	int t = a;
	a = b;
	b = t;
}

int main() {
	int basic = 950, allowance = 95, total = 1045;
	cout << "Basic: " << setw(10) << basic << " Allowance: " << setw(6) << allowance << " Total: " << setw(10) << total << endl;

	int a = 40, b = 50;
	cout << "Before Swapping: a=" << a << "\t" << "b=" << b << endl;
	swap(a, b);
	cout << "After Swapping: a=" << a << "\t" << "b=" << b << endl;

	float c, d;
	cout << "Enter c and d: ";
	cin >> c >> d;
	cout << "Multiplication= " << mul(c, d) << endl;
	cout << "Division= " << div(c, d) << endl;

	return 0;
}

