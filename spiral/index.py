# import turtle
import turtle
# setup turtle pen
t = turtle.Pen()
# changes the speed of the turtle
t.speed(0)
# changes the background color
turtle.bgcolor("black")
t.pencolor("blue")  # setting color
t.hideturtle()
t.width(3)
# motevaziol azla
for i in range(5):
    if i % 2 == 1:
        t.forward(50)
        t.left(120)
    else:
        t.forward(100)
        t.left(60)
# 6 zeli
# for i in range(6):
#     t.forward(100)
#     t.left(60)

# zoozanagheh
# t.left(0)
# t.forward(400)
#
#
# t.left(120)
# t.forward(200)
# t.left(60)
# t.forward(200)
# t.left(60)
# t.forward(200)

turtle.done()



