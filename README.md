# Dumbella_Algorithm
Recuirtment Task :


Problem description
The city of Bath is a noted Olympic training ground—bringing local, national, and even international teams to practice. However, even the finest gymnasium falls victim to the cardinals in... Weights put back in the wrong spots.
All of the pairs of dumbbells sit in no particular order on the two racks, possibly even with some of them split between rows. Initially each row has an equal number of dumbbells, however, this being a well-funded professional gym, there is infinite space at either end of each to hold any additional weights. To move a dumbbell, you may either roll it to a free neighbouring space on the same row with almost no effort, or you may pick up and lift it to another free spot; this takes strength proportional to its weight. For each pair of dumbbells, both have the same unique weight.
What is the heaviest of the weights that you need to be able to lift in order to put identical weights next to each other? Note that you may end up with different numbers of weights on each row after rearranging; this is fine.

Input Format
The input consists of:
• One line containing the integer n , the number of pairs;
• Two lines, each containing n integers W1 … Wn, where Wi is the mass of the weight i-th from the left along this row. Every weight in the input appears exactly twice.

Constraints
1< = n <= 106
1< = Wi <= 109 for each i



Output Format
Output the weight of the heaviest dumbbell that must be moved, in order that all items can be paired up while lifting the smallest possible maximum weight.
Sample Input 0
5
2 1 8 2 8
9 9 4 1 4
Sample Output 0
2
