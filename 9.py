t1=(1,2,5,7,9,2,4,6,8,10)
half=len(t1)//2
print("First half of t1:",t1[:half])
print("Second half of t1:",t1[half:])
t2=tuple(x for x in t1 if x%2==0)
print("Tuple of even values(t2):",t2)
t3=(11,13,15)
concatenated=t1+t3
print("Concatenated tuple(t1+t3):",concatenated)
print("Maximum value in t1:",max(t1))
print("Minimum value in t1:",min(t1))
