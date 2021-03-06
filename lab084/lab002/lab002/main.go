package main

import (
	"github.com/robertkrimen/otto"
	"log"
)

func main() {
	vm := otto.New()

	script, err := vm.Compile("js/test1.js", nil)
	if err != nil {
		log.Fatalf("compile error:%v", err)
	}

	//要先调用run script，把这些方法放到vm中
	_, err = vm.Run(script)
	if err != nil {
		log.Fatalf("run error:%v", err)
	}

	//调用里面的方法
	vm.Run(`
		sayHello2()
	`)
}
