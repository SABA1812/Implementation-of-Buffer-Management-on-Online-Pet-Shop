<?php
$pagecode=   "#include<conio.h>
#include<iostream>
#include<stdlib.h>
#include<fstream>
#include<string>
using namespace std;
class student
{
public:char
name[25],usn[15],branch[15],
buffer[100];
}temp,s, s1[100];
char extra[45];
int i,no=0,mode=1;
void pack()
{
fstream app;
if(mode==0)
app.open(\"st1.txt\",ios::app);
else
app.open(\"st1.txt\",ios::out);
if(!app)
{
cout<<\"cant open the file in
output mode\";
_getch();
exit(0);
}
strcpy(s.buffer,s.name);
strcat(s.buffer,\"|\");
strcat(s.buffer,s.usn);
strcat(s.buffer,\"|\");
strcat(s.buffer,s.branch);
int count=strlen(s.buffer);
for(int k=0;k<45-count;k++)
strcat(s.buffer,\"|\");
strcat(s.buffer,\"\n\");
app<<s.buffer;
app.close();
}
void unpack()
{
fstream in;
in.open(\"st1.txt\",ios::in);
i=0,no=0;
if(!in)
{
cout<<\"cant open the file in
input mode\"; getch();
exit(0);
}
while(!in.eof())
{
in.getline(s1[i].name,15,'|');
in.getline(s1[i].usn,15,'|');
in.getline(s1[i].branch,15,'|');
in.getline(extra,45,'\n');
no++;
i++;
}
in.close();
}
void write()
{
cout<<\"\n enter the student
name\n\";
cin>>s.name;
cout<<\"enter the student usn\n\";
cin>>s.usn;
cout<<\"enter the student
branch\n\";
cin>>s.branch;
pack();
mode=0;
}
void search()
{
char usn[15],extra[45];
cout<<\"enter the usn to search=\";
cin>>usn;
unpack();
for(i=0;i<no;i++)
{
if(strcmp(s1[i].usn,usn)==0)
{
cout<<\"\nrecord found\";
cout<<\"\n\"<<s1[i].name<<\"\t\"<<s1[i
].usn<<\"\t\"<<s1[i].branch;
getch();
return;
}
}
cout<<\"record not found\";
getch();
return;
}
void display()
{
cout<<\"name\t\t usn\t\t
branch\n\n\";
unpack();
for(int i=0;i<no;i++)
cout<<\"\n\n\"<<s1[i].name<<\"\t\t\"<<
s1[i].usn<<\"\t\t\"<<s1[i].branch;
getch();
}
void modify()
{
char usn[15];int j;
cout<<\"enter the usn to search\n\";
cin>>usn;
unpack();no--;
for( j=0;j<no;j++)
{
if(strcmp(usn,s1[j].usn)==0)
{
cout<<\"the old values of the
record are with usn\"<<usn<<\"are\";
cout<<\"\nname=\"<<s1[j].name;
cout<<\"\nusn=\"<<s1[j].usn;
cout<<\"\nbranch=\"<<s1[j].branch;
cout<<\"enter the new
values\n\";
cout<<\"\nname=\";
cin>>s1[j].name;
cout<<\"\nusn=\";
cin>>s1[j].usn;
cout<<\"\nbranch=\";
cin>>s1[j].branch;
break;
}
}
if(j==no)
{
cout<<\"the record with usn is
not present\";
getch();
return;
}
mode=1;\n";

echo "$pagecode";
?>