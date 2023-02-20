// [9] Write a cpp program which shows use of “static member function".
#include <iostream>
using namespace std;

class MyClass {
public:
	static int count;
	
	static void incrementCount() {
		count++;
	}
};

int MyClass::count = 0;

int main() {
	MyClass::incrementCount();
	MyClass::incrementCount();
	MyClass::incrementCount();
	
	cout << "MyClass count is: " << MyClass::count << endl;
	
	return 0;
}

