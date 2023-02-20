// [12] Write a cpp program for a friend function. 
#include <iostream>
using namespace std;

class MyClass {
private:
	int value;
	
public:
	MyClass(int v) {
		value = v;
	}
	
	friend void printValue(MyClass obj);
};

void printValue(MyClass obj) {
	cout << "Value of object: " << obj.value << endl;
}

int main() {
	MyClass myObj(42);
	printValue(myObj);
	
	return 0;
}

