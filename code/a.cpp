#include<iostream>
#include<bits/stdc++.h>

using namespace std;

int main()
{
    int tkase=0;
    cin>>tkase;

    for(int i=0; i<tkase; i++)
    {
        int a,b,c;
        int astone=0,bstone=0,cstone=0;
        int xtone=0;
        cin>>a>>b>>c;
        //int d =1;
        while (b>=1 && c>=2)
        {
            bstone = bstone+1;
            cstone = cstone+2;
            b = b-1;
            c = c-2;
        }

        while (a>=1 && b>=2)
        {
            astone = astone+1;
            bstone = bstone +2;
            a = a-1;
            b = b-2;
        }

        cout<<astone+bstone+cstone<<endl;
        /*if (d <tkase)
        {
            cout<<astone+bstone+cstone<<endl;
        }
        else
            return 0;
        d = d+1;*/

    }
     return 0;
}
