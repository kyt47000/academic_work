for i in range(33, 127, 5):
    for j in range(i, min(i+5, 127)):
        print(f"{j} {chr(j)} {hex(j)}  ", end=" ")
    print()
