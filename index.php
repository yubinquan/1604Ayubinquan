

#include <iostream>
using namespace std;

int main()
{
int num1,num2;
	int sum ,temp;

	cin>>num1 ;
	cin>>num2;

	while( num2!=0 )
    {
        sum = num1 ^ num2;
        temp = num1 & num2;
        num1 = sum;
        num2 = temp;
    }

	cout <<num1<<endl;
	return 0;
}
