layer     filters    size              input                output
    0 conv     32  3 x 3 / 1   832 x 832 x   3   ->   832 x 832 x  32  1.196 BFLOPs
    1 conv     64  3 x 3 / 2   832 x 832 x  32   ->   416 x 416 x  64  6.380 BFLOPs
    2 conv     32  1 x 1 / 1   416 x 416 x  64   ->   416 x 416 x  32  0.709 BFLOPs
    3 conv     64  3 x 3 / 1   416 x 416 x  32   ->   416 x 416 x  64  6.380 BFLOPs
    4 res    1                 416 x 416 x  64   ->   416 x 416 x  64
    5 conv    128  3 x 3 / 2   416 x 416 x  64   ->   208 x 208 x 128  6.380 BFLOPs
    6 conv     64  1 x 1 / 1   208 x 208 x 128   ->   208 x 208 x  64  0.709 BFLOPs
    7 conv    128  3 x 3 / 1   208 x 208 x  64   ->   208 x 208 x 128  6.380 BFLOPs
    8 res    5                 208 x 208 x 128   ->   208 x 208 x 128
    9 conv     64  1 x 1 / 1   208 x 208 x 128   ->   208 x 208 x  64  0.709 BFLOPs
   10 conv    128  3 x 3 / 1   208 x 208 x  64   ->   208 x 208 x 128  6.380 BFLOPs
   11 res    8                 208 x 208 x 128   ->   208 x 208 x 128
   12 conv    256  3 x 3 / 2   208 x 208 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   13 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   14 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   15 res   12                 104 x 104 x 256   ->   104 x 104 x 256
   16 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   17 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   18 res   15                 104 x 104 x 256   ->   104 x 104 x 256
   19 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   20 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   21 res   18                 104 x 104 x 256   ->   104 x 104 x 256
   22 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   23 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   24 res   21                 104 x 104 x 256   ->   104 x 104 x 256
   25 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   26 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   27 res   24                 104 x 104 x 256   ->   104 x 104 x 256
   28 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   29 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   30 res   27                 104 x 104 x 256   ->   104 x 104 x 256
   31 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   32 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   33 res   30                 104 x 104 x 256   ->   104 x 104 x 256
   34 conv    128  1 x 1 / 1   104 x 104 x 256   ->   104 x 104 x 128  0.709 BFLOPs
   35 conv    256  3 x 3 / 1   104 x 104 x 128   ->   104 x 104 x 256  6.380 BFLOPs
   36 res   33                 104 x 104 x 256   ->   104 x 104 x 256
   37 conv    512  3 x 3 / 2   104 x 104 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   38 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   39 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   40 res   37                  52 x  52 x 512   ->    52 x  52 x 512
   41 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   42 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   43 res   40                  52 x  52 x 512   ->    52 x  52 x 512
   44 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   45 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   46 res   43                  52 x  52 x 512   ->    52 x  52 x 512
   47 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   48 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   49 res   46                  52 x  52 x 512   ->    52 x  52 x 512
   50 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   51 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   52 res   49                  52 x  52 x 512   ->    52 x  52 x 512
   53 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   54 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   55 res   52                  52 x  52 x 512   ->    52 x  52 x 512
   56 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   57 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   58 res   55                  52 x  52 x 512   ->    52 x  52 x 512
   59 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   60 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   61 res   58                  52 x  52 x 512   ->    52 x  52 x 512
   62 conv   1024  3 x 3 / 2    52 x  52 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   63 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   64 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   65 res   62                  26 x  26 x1024   ->    26 x  26 x1024
   66 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   67 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   68 res   65                  26 x  26 x1024   ->    26 x  26 x1024
   69 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   70 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   71 res   68                  26 x  26 x1024   ->    26 x  26 x1024
   72 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   73 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   74 res   71                  26 x  26 x1024   ->    26 x  26 x1024
   75 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   76 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   77 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   78 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   79 conv    512  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x 512  0.709 BFLOPs
   80 conv   1024  3 x 3 / 1    26 x  26 x 512   ->    26 x  26 x1024  6.380 BFLOPs
   81 conv     21  1 x 1 / 1    26 x  26 x1024   ->    26 x  26 x  21  0.029 BFLOPs
   82 yolo
   83 route  79
   84 conv    256  1 x 1 / 1    26 x  26 x 512   ->    26 x  26 x 256  0.177 BFLOPs
   85 upsample            2x    26 x  26 x 256   ->    52 x  52 x 256
   86 route  85 61
   87 conv    256  1 x 1 / 1    52 x  52 x 768   ->    52 x  52 x 256  1.063 BFLOPs
   88 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   89 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   90 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   91 conv    256  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x 256  0.709 BFLOPs
   92 conv    512  3 x 3 / 1    52 x  52 x 256   ->    52 x  52 x 512  6.380 BFLOPs
   93 conv     21  1 x 1 / 1    52 x  52 x 512   ->    52 x  52 x  21  0.058 BFLOPs
   94 yolo
   95 route  91
   96 conv    128  1 x 1 / 1    52 x  52 x 256   ->    52 x  52 x 128  0.177 BFLOPs
   97 upsample            4x    52 x  52 x 128   ->   208 x 208 x 128
   98 route  97 11
   99 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
  100 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
  101 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
  102 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
  103 conv    128  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x 128  2.835 BFLOPs
  104 conv    256  3 x 3 / 1   208 x 208 x 128   ->   208 x 208 x 256  25.518 BFLOPs
  105 conv     21  1 x 1 / 1   208 x 208 x 256   ->   208 x 208 x  21  0.465 BFLOPs
  106 yolo
  