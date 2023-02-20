// [2] Write a cpp program which explains the use of a manipulators operator. 
#include <iostream>
#include <iomanip>

using namespace std;

int main() {
	double pi = 3.14159;
	
	cout << "The value of pi is " << setprecision(5) << pi << endl;
	cout << "The value of pi is " << fixed << setprecision(2) << pi << endl;
	
	return 0;
}

