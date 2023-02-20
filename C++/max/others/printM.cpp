#include <iostream>
using namespace std;

int main() {
	int n;
	cout << "Enter the size of M: ";
	cin >> n;
	
	for(int i = 0; i < n; i++) {
		for(int j = 0; j < n; j++) {
			if(j == 0 || j == n-1 || (i == j && j <= n/2) || (i+j == n-1 && j <= n/2)) {
				cout << "* ";
			}
			else {
				cout << "  ";
			}
		}
		cout << endl;
	}
	
	return 0;
}

