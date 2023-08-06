import { useRef, useState } from "react";
import { createStyles, NumberInput, ActionIcon, rem } from "@mantine/core";
import { IconPlus, IconMinus } from "@tabler/icons-react";

const useStyles = createStyles((theme) => ({
  wrapper: {
    display: "flex",
    alignItems: "center",
    justifyContent: "space-between",
    padding: `${theme.spacing.md}`,
    borderRadius: theme.radius.sm,

  },

  control: {
    backgroundColor:
      theme.colorScheme === "dark" ? theme.colors.dark[7] : theme.white,
    border: `${rem(1)} solid ${theme.colorScheme === "dark" ? "transparent" : theme.colors.gray[3]
      }`,

    "&:disabled": {
      borderColor:
        theme.colorScheme === "dark" ? "transparent" : theme.colors.gray[3],
      opacity: 0.8,
      backgroundColor: "transparent",
    },
  },

  input: {
    textAlign: "center",
    flex: 1,
  },
}));

export function QuantityInput({ min = 1, max = 10, quantity, onIncrease, onDecrease }) {
  const { classes } = useStyles();
  const handlers = useRef(null);
  const [value, setValue] = useState(quantity);

  return (
    <div className={classes.wrapper} style={{ width: "8rem", padding: 0 }}>
      <ActionIcon
        component="button"
        size={28}
        variant="transparent"
        onClick={() => {
          if (quantity > min) {
            onDecrease();
          }
        }}
        disabled={quantity === min}
        className={classes.control}
        onMouseDown={(event) => event.preventDefault()}
      >
        <IconMinus stroke={1.5} />
      </ActionIcon>

      <NumberInput
        variant="unstyled"
        min={min}
        max={max}
        value={quantity}
        onChange={(newValue) => {
          // يُمكنك إضافة التحقق من القيمة هنا
          // إذا لم تكن رقمًا صحيحًا فيما بين الحد الأدنى والحد الأقصى
          // فإننا لا نقوم بتحديث القيمة
          if (newValue >= min && newValue <= max) {
            setValue(newValue);
          }
        }}
        classNames={{ input: classes.input }}
      />

      <ActionIcon
        component="button"
        size={28}
        variant="transparent"
        onClick={() => {
          if (quantity < max) {
            onIncrease();
          }
        }}
        disabled={quantity === max}
        className={classes.control}
        onMouseDown={(event) => event.preventDefault()}
      >
        <IconPlus size="1rem" stroke={1.5} />
      </ActionIcon>
    </div>
  );
}






