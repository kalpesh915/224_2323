/**
    example of basic switch case
*/

#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter any Day Number \t");
    scanf("%d", &ip);

    switch(ip){
        case 0:{
            printf("\n Sunday");
            break;
        }
        case 1:{
            printf("\n Monday");
            break;
        }
        case 2:{
            printf("\n Tuesday");
            break;
        }
        case 3:{
            printf("\n Wednesday");
            break;
        }
        case 4:{
            printf("\n Thursday");
            break;
        }
        case 5:{
            printf("\n Friday");
            break;
        }
        case 6:{
            printf("\n Saturday");
            break;
        }
        default:{
            printf("\n Day is out of Range");
            break;
        }
    }
}
