package main

import "fmt"

func main() {
	fmt.Print("You win: ")
	doorNumber := 2

	switch doorNumber {
	case 1:
		fmt.Println("a new car")
	case 2:
		fmt.Println("a llama")
		fallthrough // allows the switch to continue running through explicitly
	default:
		fmt.Println("a goat")
	}
}
