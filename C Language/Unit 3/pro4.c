/**
    size of array
*/

#include<stdio.h>

void main(){
                /// 0   1   2   3   4   5   6  7   8   9
    int ip1[] = {10, 20, 30, 40, 50, 60, 70, 80, 90, 100};

    printf("\n First value of array is %d", ip1[0]);
    printf("\n Second value of array is %d", ip1[0]);

    ip1[5] = ip1[0] + ip1[2];

    printf("\n ip1[5] is %d", ip1[5]);
}
