# php-web
The code is mianly a simple MVC test example; I will add some advanced examples about php-mvc in the following practice.
In php-mumvc，after deploying the code on your local server, you could input the following URL in your browser location:         "http://localhost/mymvc/index.php?c=my&a=index&p=welcome" 

#include<iostream>
#include<vector>
#include<utility>
#include<algorithm>
#include<string>
using namespace std;

vector<int> Sort(string strInt)
{
	int size = strInt.size();
	vector<int> vecInt;
	if(size == 0)
	{
	return vecInt;
	}
	int num = 0;
	for(int i = 0;i <= size;++i)
	{
		if(i == size || strInt[i] == ',')
		{
			vecInt.push_back(num);
			num = 0;
		}
		else if(strInt[i] >= '0' && strInt[i] <= '9')
		{
		  num = num * 10 + strInt[i] - '0';
		}
	}

	sort(vecInt.begin(),vecInt.end());
	int count = vecInt.size();
	int start = 0;
	for(int i = 1;i <= count;++i)
	{
		if(i == count || vecInt[i] != vecInt[i-1]+1)
		{
			
			for(int j = start+1;j <= i-2;++j)
			{
				vecInt[j] = -1;
			}
				start = i;
		}
	}
	return vecInt;
}

int main()
{
	// 	1,4,3,110,2,90,7
	string strInt;
	vector<int> vecInt;
	int size;
	while(cin>>strInt)
	{
		vecInt = Sort(strInt);
		size = vecInt.size();
		for(int i = 0;i < size;++i)
		{
			if(vecInt[i] == -1)
			{
			continue;
			}
		
			if(i == 0)
			{
				cout<<vecInt[i];
			}
			else
			{
				cout<<" "<<vecInt[i];
			}
		}
			cout<<endl;
	}
return 0;
}
