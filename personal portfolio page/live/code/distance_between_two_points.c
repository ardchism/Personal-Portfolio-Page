/**********Use:find the distance between 2 points*****************/
/**********Author:Adam Chisholm**********************************/
/**********Created:9/11/2015************************************/

#include <stdio.h>
#include <string.h>
#include <math.h>

float first_x, first_y;
float second_x, second_y;
float diffrence_x, diffrence_y;
float distance;
char line[100];

int main(){
	// Ask for first point
	printf("please print two coordinates with a space between them:\n");		
	// Store user input
	fgets(line, sizeof(line), stdin);											
	// Store first point from line
	sscanf(line, "%f%f", &first_x, &first_y); 											

	// Ask for second point
	printf("please print two coordinates with a space between them:\n");
	// Store user input
	fgets(line, sizeof(line), stdin);	
	// Store second point from line
	sscanf(line, "%f%f", &second_x, &second_y); 											
	
	printf("first piont is (%f, %f)\n", first_x, first_y);
	printf("second point is (%f, %f)\n", second_x, second_y);
	
	diffrence_x = powf((second_x - first_x), 2);
	diffrence_y = powf((second_y - first_y), 2);
	
	distance = sqrtf((diffrence_x + diffrence_y));
	
	printf("The distance is %f\n", distance);

}
