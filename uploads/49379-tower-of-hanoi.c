#include <iostream>
#include<ctime>

using namespace std;

void tower(int n,char sou,char aux,char dest)
{
    if(n==1)
    {
       // cout<<"Moves Disk from "<<sou<<" to "<<dest<<endl;
    }

    else
    {
        tower(n-1,sou,dest,aux);
        tower(1,sou,aux,dest);
        tower(n-1,aux,sou,dest);
    }

}

int main()
{
    int n;
    double t1,t2,sum,time_for_one;
    cout<<"Enter the no of DiskS :";
    cin>>n;
    t1=clock();
   // cout<<t1;
    for(int i=1;i<=10000;i++)
    {
         tower(n,'S','A','D');
    }
    t2=clock();
    sum=t2-t1;
     cout<<sum;


    //time_for_one=t3/10000;
    //cout<<"Time complexity for a Tower of Hanoi Problem :"<<time_for_one<<endl;


    return 0;
}

