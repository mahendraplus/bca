// [10] Write a cpp program which explain concept of a “array of object". 
#include <iostream>
using namespace std;

class MyClass {
public:
	int value;
	
	void printValue() {
		cout << "Value: " << value << endl;
	}
};

int main() {
	const int ARRAY_SIZE = 5;
	MyClass myArray[ARRAY_SIZE];
	
	for (int i = 0; i < ARRAY_SIZE; i++) {
		myArray[i].value = i;
		myArray[i].printValue();
	}
	
	return 0;
}

