// [15] Write a cpp program which explain concept of a returning objects. 
#include <iostream>

class MyClass {
private:
	int value;
	
public:
	MyClass(int v) {
		value = v;
	}
	
	MyClass add(MyClass other) {
		int newValue = value + other.value;
		return MyClass(newValue);
	}
	
	void display() {
		std::cout << "Value: " << value << std::endl;
	}
};

int main() {
	MyClass myObj1(5);
	MyClass myObj2(10);
	
	MyClass myObj3 = myObj1.add(myObj2);
	
	std::cout << "myObj1: ";
	myObj1.display();
	
	std::cout << "myObj2: ";
	myObj2.display();
	
	std::cout << "myObj3: ";
	myObj3.display();
	
	return 0;
}

