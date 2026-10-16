def find_all_occurrences(main_string,sub_string):
	indices=[]
	index=main_string.find(sub_string)
	while index!=-1:
		indices.append(index)
		index=main_string.find(sub_string,index+1)
	return indices if indices else -1
main_str=input("Enter the main string:")
sub_str=input("Enter the substring to search for:")
result=find_all_occurrences(main_str,sub_str)
print("Indices:",result)
