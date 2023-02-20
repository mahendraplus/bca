#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main() {
	string filename;
	cout << "Enter the name of the file: ";
	cin >> filename;
	
	ifstream inputFile(filename);
	
	if (inputFile.is_open()) {
		string line;
		while (getline(inputFile, line)) {
			cout << line << endl;
		}
		inputFile.close();
	}
	else {
		cout << "Unable to open file" << endl;
	}
	
	return 0;
}

