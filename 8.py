def letter_frequency():
	sentence = input("Enter a sentence:")
	frequency = {}
	for char in sentence:
		if char.isalpha():
			char=char.lower()
			frequency[char] = frequency.get(char,0)+1
	print("Letter frequencies:")
	for letter,count in sorted(frequency.items()):
		print(letter,":",count)
letter_frequency()
