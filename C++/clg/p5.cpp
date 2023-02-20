// [5] Write a cpp program which explains the concept of default arguments. 
#include <iostream>

using namespace std;

void greet(string name, string greeting = "Hello") {
	cout << greeting << ", " << name << "!" << endl;
}

int main() {
	string name1 = "Mahendra";
	string name2 = "Max";
	
	greet(name1);
	greet(name2,"Hi");
	
	return 0;
}

