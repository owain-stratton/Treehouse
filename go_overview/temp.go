package main

import (
	"fmt"
	"math"

	"github.com/golang/example/stringutil"
	"github.com/treehouse-projects/go-intro/welcome"
)

var myNumber = 1.23

func main() {
	numcalc()
	welcomeMessage()
}

func numcalc() {
	roundedUp := math.Ceil(myNumber)
	roundedDown := math.Floor(myNumber)
	fmt.Println(roundedUp, roundedDown)
}

func welcomeMessage() {
	fmt.Println(stringutil.Reverse(welcome.English))
	fmt.Println(welcome.Japanese)
}
