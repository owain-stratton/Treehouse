package main

import (
	"fmt"
	"net"
	"reflect"
	"time"
)

func main() {

	var a, b int
	a, b = 1, 2

	var c float64
	c = 1.5

	// Shorthand variable declaration
	e := "hello"

	fmt.Println(reflect.TypeOf(a), reflect.TypeOf(b))
	fmt.Println(reflect.TypeOf(c))
	fmt.Println(reflect.TypeOf(e))
	fmt.Println(reflect.TypeOf(false))
	fmt.Println(reflect.TypeOf(net.IPv4(127, 0, 0, 1)))
	fmt.Println(reflect.TypeOf(time.Now()))
}
