#include<iostream>
#include<cstdlib>
#include<ctime>
using namespace std;

int main() {
	
	while(1){
		long sec = time(0);
		if(sec != time(0)){
			srand(sec);
			int num = rand()/1000000;
			cout<<"Random Number is : "<<num
			<<"\n";
			
		}
	
	}


}
