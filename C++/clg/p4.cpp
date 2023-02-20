// [4] Write a cpp program which explain the feature of a inline function.
#include <iostream>

using namespace std;

inline int square(int x) {
	return x * x;
}

int main() {
	int num = 5;
	
	cout << "The square of " << num << " is " << square(num) << endl;
	
	return 0;
}

