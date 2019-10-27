
#include <iostream>
#include <bits/stdc++.h>

using namespace std;

int main ()
{
    int h=0 , m=0 , s=0, d =0;
    int total=0;

    int hh=0, mm=0, ss=0;
    int c=0;

    while (1)
    {
        c++;
        cout<<"Please enter the next tutorial length"<<endl;
        cout<<"=> Hours = "; cin>>h;
        cout<<"=> Minutes = "; cin>>m;
        cout<<"=> Seconds = "; cin>>s;

            hh = hh +h;
            mm = mm +m;
            ss = ss +s;


         if (ss >= 60)
        {
            mm = mm +1;
            ss = ss-60;
        }

        if (mm >=60)
        {
            hh = hh+1;
            mm = mm - 60;
        }

        if (hh >= 24)
        {
            d = d+1;
            hh = hh - 24;
        }
        cout<<"------------------------------------------------------------------"<<endl;
        cout<<"Entry no of time = "<<c<<". ===>>"<<endl;
        cout<<"You nedd to complete these tutorial ...."<<endl;
        cout<<"\t____________________________________________________"<<endl;
        cout<<"\t\t"<<d<<" day , "<<hh<<" Hour "<<mm<<" minutes and "<<ss<<" seconds "<<endl;
        cout<<"\t____________________________________________________"<<endl;
        cout<<"------------------------------------------------------------------"<<endl;

    }
    return 0;
}
