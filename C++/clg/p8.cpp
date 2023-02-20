// [8] Write a cpp program for static class member. (Class member should be a static variable)
#include <iostream>
using namespace std;
class MyClass {
public:
	static int count;
	
	MyClass() {
		count++;
	}
};

int MyClass::count = 0;

int main() {
	MyClass obj1;
	MyClass obj2;
	MyClass obj3;
	
	cout << "Number of MyClass objects created: " << MyClass::count << endl;
	
	return 0;
}

