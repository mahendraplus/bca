// [11] Write a cpp program which explain concept of " object as a arguments". 
#include <iostream>
using namespace std;

class Rectangle {
public:
	double width;
	double height;
	
	Rectangle(double w, double h) {
		width = w;
		height = h;
	}
	
	double area() {
		return width * height;
	}
};

void printArea(Rectangle rect) {
	cout << "Area of rectangle: " << rect.area() << endl;
}

int main() {
	Rectangle myRect(5.0, 10.0);
	printArea(myRect);
	
	return 0;
}

