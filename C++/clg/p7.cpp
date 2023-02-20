// [7] Write a cpp program for arrays within a class. (How to use a array in a class). 
#include <iostream>

using namespace std;

class MyClass {
private:
	int myArray[5];
	
public:
	void setArray(int index, int value) {
		myArray[index] = value;
	}
	
	int getArray(int index) {
		return myArray[index];
	}
};

int main() {
	MyClass myObject;
	
	myObject.setArray(0, 10);
	myObject.setArray(1, 20);
	myObject.setArray(2, 30);
	myObject.setArray(3, 40);
	myObject.setArray(4, 50);
	
	cout << "The values of the array are: " << endl;
	
	for (int i = 0; i < 5; i++) {
		cout << myObject.getArray(i) << endl;
	}
	
	return 0;
}

