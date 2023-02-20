// [13] Write a cpp program for a function friendly to two classes.
#include <iostream>

class MyClass2;

class MyClass1 {
private:
	int value;
	
public:
	MyClass1(int v) {
		value = v;
	}
	
	friend void swapValues(MyClass1& obj1, MyClass2& obj2);
};

class MyClass2 {
private:
	int value;
	
public:
	MyClass2(int v) {
		value = v;
	}
	
	friend void swapValues(MyClass1& obj1, MyClass2& obj2);
};

void swapValues(MyClass1& obj1, MyClass2& obj2) {
	int temp = obj1.value;
	obj1.value = obj2.value;
	obj2.value = temp;
}

int main() {
	MyClass1 myObj1(42);
	MyClass2 myObj2(99);
	
	std::cout << "Values before swap: " << myObj1.value << ", " << myObj2.value << std::endl;
	
	swapValues(myObj1, myObj2);
	
	std::cout << "Values after swap: " << myObj1.value << ", " << myObj2.value << std::endl;
	
	return 0;
}

