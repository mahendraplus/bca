#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main() {
	ofstream outputFile;
	string filename;
	
	cout << "Enter the name of the file: ";
	cin >> filename;
	
	outputFile.open(filename);
	
	if(outputFile.is_open()) {
		outputFile << "Hello, world!" << endl;
		outputFile << "This is a test file." << endl;
		outputFile.close();
		cout << "File created successfully." << endl;
	}
	else {
		cout << "Error: could not create file." << endl;
	}
	
	return 0;
}

