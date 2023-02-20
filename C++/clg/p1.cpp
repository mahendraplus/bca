//[1] Write a cpp program which explains the use of a scope resolution operator. 

#include <iostream>

using namespace std;

int x = 10;

int main() {
	int x = 5;

	cout << "local x = " << x << endl;
	cout << "global x = " << ::x << endl;

	return 0;
}

