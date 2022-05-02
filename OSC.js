function O(i) {
	return typeof i == 'object' ? i : document.getElementbyId(i)
}

function S(i) {
	return O(i).style
}

function C(i) {
	return document.getElementbyClassName(i)
}