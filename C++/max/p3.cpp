// MAX //
#include<iostream>
#include<iomanip>
using namespace std;

inline float mul(float a,float b){
	return(a*b);
}
inline double div(double a,double b){
	return(a/b);
}

int main(){
	float a,b;
	cout<<"Enter a and b :\n";
	cin>>a>>b;
	cout<<"Multiplication= "<<mul(a,b);
	cout<<"\nDivision= "<<div(a,b);
}

/*
  OUTPUT:
  Enter a and b :
  70
  2
  Multiplication= 140
  Division= 35

 */
