package behavior3go

//b3 define
const (
	VERSION = "0.2.0"

	// Node categories
	COMPOSITE = "composite" //li 组合节点
	DECORATOR = "decorator" //li 装饰节点
	ACTION    = "action"    //li 行为节点
	CONDITION = "condition" //li 条件节点
)

// Returning status
type Status uint8

const (
	SUCCESS Status = 1
	FAILURE Status = 2
	RUNNING Status = 3
	ERROR   Status = 4
)
