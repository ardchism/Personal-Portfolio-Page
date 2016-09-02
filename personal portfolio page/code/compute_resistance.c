/**********Use:compute resistance**********************/
/**********Author:Adam Chisholm**********************************/
/**********Created:9/11/2015************************************/
/**********Line Added to test branches**************************/

#include <stdio.h>
#include <string.h>
#include <math.h>

float current_resistor;			/*store next input*/
float total_resistance;			/*store total (computed)*/
char line[20];					/*store user input*/
int number_resistors;			/*# of resistors (user generated)*/
int count;						/*used in for loop*/

int main(){
	// Determine the # of resistors
	printf("please enter the number of resistors:\n");
	fgets(line, sizeof(line), stdin);
	sscanf(line, "%d", &number_resistors);
	
	// Ask for resistance and add to running total
	for( count = 0; count < number_resistors; count++) {
		
		printf("please enter resistance:");
		fgets(line, sizeof(line), stdin);
		sscanf(line, "%f", &current_resistor);
		
		total_resistance += (1/current_resistor);
	} 
	
	// Compute final answer based on formula
	total_resistance = 1/total_resistance;
	
	// Print result
	printf("the total resistance of a %d resistor network is %f\n", number_resistors, total_resistance);
	
	return(0);
}
